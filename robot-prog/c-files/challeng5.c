#include "D_Main.h"
#include "D_I2C.h"
#include "D_SIO.h"
//--------------------------------------------------------------------------------
// Program Name : challeng5.C
//--------------------------------------------------------------------------------
void user_main(void)
{
    lcd_puts_sensor(1, CN2, CN2, CN2, CN2);
    while (TRUE) {
        gV[VAR_A] = gAD[CN2];
        motor(50, 50);
        wait_ms(1000);
        gV[VAR_B] = gAD[CN2];
        if (gV[VAR_B] > gV[VAR_A]) {
            motor(50, 50);
            wait_ms(5000);
            break;
        } else {
            motor(-50, -50);
            wait_ms(5000);
            break;
        }
    }
    motor(0, 0);
}
//--------------------------------------------------------------------------------
