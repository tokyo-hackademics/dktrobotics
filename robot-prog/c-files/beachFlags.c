#include "D_Main.h"
#include "D_I2C.h"
#include "D_SIO.h"
//--------------------------------------------------------------------------------
// Program Name : beachFlags.C
//--------------------------------------------------------------------------------
void user_main(void)
{
    while (TRUE) {
        lcd_putX(1, (ROMC *)"CN1 CN2 CN3 CN4");
        lcd_puts_sensor(2, CN1, CN2, CN3, CN4);
        if (gAD[CN1] > 51) {
            motor(80, 70);
            wait_ms(300);
        } else {
            motor(-20, 20);
            wait_ms(0);
        }
    }
}
//--------------------------------------------------------------------------------
