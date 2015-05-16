#include "D_Main.h"
#include "D_I2C.h"
#include "D_SIO.h"
//--------------------------------------------------------------------------------
// Program Name : rei3.C
//--------------------------------------------------------------------------------
void user_main(void)
{
    while (TRUE) {
        if (gAD[CN3] > 511) {
            lcd_putX(1, (ROMC *)"Left");
            wait_ms(1000);
        } else if (gAD[CN4] > 511) {
            lcd_putX(1, (ROMC *)"Right");
            wait_ms(1000);
        } else {
            lcd_putX(1, (ROMC *)"");
        }
    }
}
//--------------------------------------------------------------------------------
