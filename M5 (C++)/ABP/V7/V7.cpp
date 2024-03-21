#include <iostream>
#include <cstdlib>
#include <ctime>
#include <Windows.h>
#include "MMSystem.h"
#include <chrono>
#include <thread> 
using namespace std;



int main() {
   
    cout << "Primer sonido:\n";
    bool rep1 = true;

        std::this_thread::sleep_for(std::chrono::seconds(1));
        PlaySound(TEXT("civic.wav"), NULL, SND_SYNC);
        cout << "Introduce tu respuesta\n";
        cout << "1. Honda Civic\n";
        cout << "2. Toyota Celica\n";
        cout << "3. Mitsubishi Evo\n";
        cout << "4. Reproducir otra vez\n";

        int respuesta1;
        cin >> respuesta1;

        if (respuesta1 == 1 ) {
            cout << "Respuesta correcta\n";
        }
        else if (respuesta1 == 2 || respuesta1 == 3) {
            cout << "Respuesta incorrecta\n";
        }
        else if (respuesta1 == 4) {
            std::this_thread::sleep_for(std::chrono::seconds(1));
            PlaySound(TEXT("civic.wav"), NULL, SND_SYNC);
            cout << "Introduce tu respuesta\n";
            cout << "1. Honda Civic\n";
            cout << "2. Toyota Celica\n";
            cout << "3. Mitsubishi Evo\n";
            int respuesta1_2;
            cin >> respuesta1_2;
            if (respuesta1_2 == 1) {
                cout << "Respuesta correcta\n";
            }
            else if (respuesta1_2 == 2 || respuesta1_2 == 3) {
                cout << "Respuesta incorrecta\n";
            }

        }
    

    cout << "Reproduciendo segundo sonido\n";

    std::this_thread::sleep_for(std::chrono::seconds(2));
    PlaySound(TEXT("lambourus.wav"), NULL, SND_SYNC);
    cout << "Introduce tu respuesta\n";
    cout << "1. Lamborghini Urus\n";
    cout << "2. Mercedes-Ben< Clase G\n";
    cout << "3. Ferrari Purosangue\n";
    cout << "4. Reproducir otra vez\n";

    int respuesta2;
    cin >> respuesta2;

    if (respuesta2 == 1) {
        cout << "Respuesta correcta\n";
    }
    else if (respuesta2 == 2 || respuesta2 == 3) {
        cout << "Respuesta incorrecta\n";
    }
    else if (respuesta2 == 4) {
        std::this_thread::sleep_for(std::chrono::seconds(1));
        PlaySound(TEXT("lambourus.wav"), NULL, SND_SYNC);
        cout << "Introduce tu respuesta\n";
        cout << "1. Lamborghini Urus\n";
        cout << "2. Mercedes-Ben< Clase G\n";
        cout << "3. Ferrari Purosangue\n";
        int respuesta2_2;
        cin >> respuesta2_2;
        if (respuesta2_2 == 1) {
            cout << "Respuesta correcta\n";
        }
        else if (respuesta2_2 == 2 || respuesta2_2 == 3) {
            cout << "Respuesta incorrecta\n";
        }

    }
    cout << "Reproduciendo tercer sonido\n";

    std::this_thread::sleep_for(std::chrono::seconds(2));
    PlaySound(TEXT("nissan.wav"), NULL, SND_SYNC);
    cout << "Introduce tu respuesta\n";
    cout << "1. Toyota Supra\n";
    cout << "2. Mazda RX7\n";
    cout << "3. Nissan Skyline\n";
    cout << "4. Reproducir otra vez\n";

    int respuesta3;
    cin >> respuesta3;

    if (respuesta3 == 3) {
        cout << "Respuesta correcta\n";
    }
    else if (respuesta3 == 1 || respuesta3 == 2) {
        cout << "Respuesta incorrecta\n";
    }
    else if (respuesta3 == 4) {
        std::this_thread::sleep_for(std::chrono::seconds(1));
        PlaySound(TEXT("nissan.wav"), NULL, SND_SYNC);
        cout << "Introduce tu respuesta\n";
        cout << "1. Toyota Supra\n";
        cout << "2. Mazda RX7\n";
        cout << "3. Nissan Skyline\n";
        int respuesta3_2;
        cin >> respuesta3_2;
        if (respuesta3_2 == 3) {
            cout << "Respuesta correcta\n";
        }
        else if (respuesta3_2 == 1 || respuesta3_2 == 2) {
            cout << "Respuesta incorrecta\n";
        }

    }
    return 0;
}
