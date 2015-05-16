#include "D_Main.h"
#include "D_I2C.h"
#include "D_SIO.h"
//--------------------------------------------------------------------------------
// Program Name : touch2.C
//--------------------------------------------------------------------------------
void user_main(void)
{
    while (TRUE) {
        if (gAD[CN3] > 511) {
            lcd_putX(1, (ROMC *)"Left Touched");
            lcd_puts_sensor(2, CN1, CN2, CN3, CN4);
        } else {
            lcd_putX(1, (ROMC *)"");
            lcd_puts_sensor(2, CN1, CN2, CN3, CN4);
        }
    }
}
//--------------------------------------------------------------------------------
