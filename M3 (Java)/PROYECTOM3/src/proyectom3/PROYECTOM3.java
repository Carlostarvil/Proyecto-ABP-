package proyectom3;

//interfaz grafica
import javax.swing.*;
//acciones con componentes de interfaz grafica
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
//leer y escribir en archivos
import java.io.*;
//formatear decimales
import java.text.DecimalFormat;
import java.text.DecimalFormatSymbols;
//para no tener que declarar java.time.LocalDate fecha = java.time.LocalDate.now();
import java.time.LocalDate;
import java.util.HashMap;
import java.util.Locale;
import java.util.Map;
import com.toedter.calendar.JCalendar;
import static javax.swing.WindowConstants.EXIT_ON_CLOSE;

import java.sql.*;

public class PROYECTOM3 extends JFrame {
    //declarar variables
    private JLabel lblTipoCoche, lblCostoAuto, lblPrecioVenta, lblGastosMantenimiento, lblImpuestos, lblBeneficios;
    private JTextField txtCostoAuto, txtPrecioVenta, txtGastosMantenimiento, txtImpuestos;
    private JButton btnCalcular, btnVerBeneficios;
    private JCalendar calendarInicio, calendarFin;
    private Map<LocalDate, Double> beneficiosPorFecha;
    private DecimalFormat formatoDecimal;
    private JTextField txtTipoCoche;

    private static final String FILENAME = "beneficios.txt";

    private Connection connection = null;
    private Statement statement = null;
    private ResultSet resultSet = null;

    public PROYECTOM3() {
        initComponents();
        cargarBeneficios();
        formatoDecimal = new DecimalFormat("#,###", new DecimalFormatSymbols(new Locale("es", "ES")));

        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            String url = "jdbc:mysql://localhost:3306/netbeans_ct";
            String usuario = "CarlosTarre";
            String contraseña = "1234";
            connection = DriverManager.getConnection(url, usuario, contraseña);
        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        }
    }
    //interfaz grafica
    private void initComponents() {
        setTitle("Calculadora de Beneficios del Usuario");
        setSize(400, 400);
        setDefaultCloseOperation(EXIT_ON_CLOSE);
        setLocationRelativeTo(null);

        lblTipoCoche = new JLabel("Tipo de coche:");
        lblCostoAuto = new JLabel("Costo del automóvil:");
        lblPrecioVenta = new JLabel("Precio de venta:");
        lblGastosMantenimiento = new JLabel("Gastos de mantenimiento:");
        lblImpuestos = new JLabel("Impuestos:");
        lblBeneficios = new JLabel("Beneficios:");

        txtTipoCoche = new JTextField(10);
        txtCostoAuto = new JTextField(10);
        txtPrecioVenta = new JTextField(10);
        txtGastosMantenimiento = new JTextField(10);
        txtImpuestos = new JTextField(10);

        btnCalcular = new JButton("Calcular");
        btnCalcular.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                calcularBeneficios();
            }
        });

        btnVerBeneficios = new JButton("Ver Beneficios");
        btnVerBeneficios.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                verBeneficios();
            }
        });

        calendarInicio = new JCalendar();
        calendarFin = new JCalendar();

        JPanel panel = new JPanel();
        GroupLayout layout = new GroupLayout(panel);
        panel.setLayout(layout);
        layout.setAutoCreateGaps(true);
        layout.setAutoCreateContainerGaps(true);

        layout.setHorizontalGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                        .addComponent(lblTipoCoche)
                        .addComponent(lblCostoAuto)
                        .addComponent(lblPrecioVenta)
                        .addComponent(lblGastosMantenimiento)
                        .addComponent(lblImpuestos)
                        .addComponent(lblBeneficios))
                .addGroup(layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                        .addComponent(txtTipoCoche)
                        .addComponent(txtCostoAuto)
                        .addComponent(txtPrecioVenta)
                        .addComponent(txtGastosMantenimiento)
                        .addComponent(txtImpuestos)
                        .addComponent(btnCalcular)
                        .addComponent(btnVerBeneficios)
                        .addComponent(calendarInicio)
                        .addComponent(calendarFin))
        );

        layout.setVerticalGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(GroupLayout.Alignment.BASELINE)
                        .addComponent(lblTipoCoche)
                        .addComponent(txtTipoCoche))
                .addGroup(layout.createParallelGroup(GroupLayout.Alignment.BASELINE)
                        .addComponent(lblCostoAuto)
                        .addComponent(txtCostoAuto))
                .addGroup(layout.createParallelGroup(GroupLayout.Alignment.BASELINE)
                        .addComponent(lblPrecioVenta)
                        .addComponent(txtPrecioVenta))
                .addGroup(layout.createParallelGroup(GroupLayout.Alignment.BASELINE)
                        .addComponent(lblGastosMantenimiento)
                        .addComponent(txtGastosMantenimiento))
                .addGroup(layout.createParallelGroup(GroupLayout.Alignment.BASELINE)
                        .addComponent(lblImpuestos)
                        .addComponent(txtImpuestos))
                .addComponent(btnCalcular)
                .addComponent(btnVerBeneficios)
                .addComponent(lblBeneficios)
                .addComponent(calendarInicio)
                .addComponent(calendarFin)
        );

        add(panel);
    }

   private void calcularBeneficios() {
    // Obtener la fecha actual
    LocalDate fechaActual = LocalDate.now();

    // Calcular beneficios, convertir a decimal
    double precioVenta = parsearNumero(txtPrecioVenta.getText());
    double costoAuto = parsearNumero(txtCostoAuto.getText());
    double gastosMantenimiento = parsearNumero(txtGastosMantenimiento.getText());
    double impuestos = parsearNumero(txtImpuestos.getText());

    // Calcular los beneficios
    double beneficios = precioVenta - costoAuto - gastosMantenimiento - impuestos;

    // Redondear a tres decimales para poder hacer calculos (evitar mostrar cantidad excesiva de decimales)
    beneficios = Math.round(beneficios * 1000.0) / 1000.0;

    // Mostrar los beneficios calculados
    lblBeneficios.setText("Beneficios: $" + String.format("%.3f", beneficios));

    // Verificar si ya hay beneficios acumulados para la fecha actual
    Double beneficiosAcumulados = beneficiosPorFecha.getOrDefault(fechaActual, 0.0);

    // Acumular los beneficios
    beneficiosAcumulados += beneficios;

    // Actualizar el mapa con los beneficios acumulados
    beneficiosPorFecha.put(fechaActual, beneficiosAcumulados);

    // Mostrar los beneficios totales hasta la fecha actual
    double beneficiosTotales = calcularBeneficiosTotales();
    lblBeneficios.setText("Beneficios totales: $" + formatoDecimal.format(beneficiosTotales));

    // Guardar los beneficios acumulados
    guardarBeneficios();
}

   // Convertir texto en double
private double parsearNumero(String texto) {
    
    // Eliminar cualquier separador de miles y convertir el texto a un valor numérico
    texto = texto.replaceAll("\\.", "");
    return Double.parseDouble(texto);
}

    private double calcularBeneficiosTotales() {
        // Calcular los beneficios totales acumulados en el mapa hasta la fecha actual
        double beneficiosTotales = 0;
        for (double beneficio : beneficiosPorFecha.values()) {
            beneficiosTotales += beneficio;
        }
        return beneficiosTotales;
    }

    private void verBeneficios() {
        // Obtener el rango de fechas seleccionado y se convierte en localDate (fecha sin horario)
        LocalDate fechaInicio = calendarInicio.getDate().toInstant().atZone(java.time.ZoneId.systemDefault()).toLocalDate();
        LocalDate fechaFin = calendarFin.getDate().toInstant().atZone(java.time.ZoneId.systemDefault()).toLocalDate();

        // Calcular los beneficios dentro del rango de fechas
        double beneficiosEnRango = 0;
        for (Map.Entry<LocalDate, Double> entry : beneficiosPorFecha.entrySet()) {
            LocalDate fecha = entry.getKey();
            if (fecha.isEqual(fechaInicio) || fecha.isEqual(fechaFin) ||
                    (fecha.isAfter(fechaInicio) && fecha.isBefore(fechaFin))) {
                beneficiosEnRango += entry.getValue();
            }
        }

        // Mostrar los beneficios en el rango de fechas, mostrar texto en interfaz grafica
        JOptionPane.showMessageDialog(this, "Beneficios desde " + fechaInicio + " hasta " + fechaFin + ": $" + formatoDecimal.format(beneficiosEnRango));
    }

    //generar una variable en hashmap para guardar beneficios entre fechas
    private void cargarBeneficios() {
        //comprobar que beneficios.txt existe
        beneficiosPorFecha = new HashMap<>();
        File file = new File(FILENAME);
        if (!file.exists()) {
            return;
        }
       //leer beneficios.txt
        try (BufferedReader reader = new BufferedReader(new FileReader(FILENAME))) {
            String line;
            //leer linea
            while ((line = reader.readLine()) != null) {
                //dividir linea en 2
                String[] parts = line.split(",");
                //convertir en LocalDate
                LocalDate fecha = LocalDate.parse(parts[0]);
                double beneficio = Double.parseDouble(parts[1]);
                // Actualizar los beneficios (merge)
                beneficiosPorFecha.merge(fecha, beneficio, Double::sum);
            }
        } catch (IOException e) {
            //mensaje de excepcion
            e.printStackTrace();
        }
    }

    
    private void guardarBeneficios() {
        try (BufferedWriter writer = new BufferedWriter(new FileWriter(FILENAME))) {
            for (Map.Entry<LocalDate, Double> entry : beneficiosPorFecha.entrySet()) {
                //recuperar fecha almacenada en el hashmap
                LocalDate fecha = entry.getKey();
                double beneficio = entry.getValue();
                writer.write(fecha.toString() + "," + beneficio);
                writer.newLine();
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    public void dispose() {
        // Cierre de la conexión al cerrar la ventana
        super.dispose();
        try {
            if (resultSet != null) resultSet.close();
            if (statement != null) statement.close();
            if (connection != null) connection.close();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public static void main(String[] args) {
        //ejecutar codigos que usan swing
        
        SwingUtilities.invokeLater(new Runnable() {
            //codigo a ejecutar (todo el codigo)
            public void run() {
                new PROYECTOM3().setVisible(true);
            }
        });
    }
}

