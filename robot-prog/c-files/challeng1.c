#include "D_Main.h"
#include "D_I2C.h"
#include "D_SIO.h"
//--------------------------------------------------------------------------------
// Program Name : challeng1.C
//--------------------------------------------------------------------------------
void user_main(void)
{
    gV[VAR_A] = 0;
    while (TRUE) {
        if (gAD[CN3] > 511) {
            gV[VAR_A] = gV[VAR_A] + 1;
        } else {
        }
        lcd_putX(1, (ROMC *)"I Love RoboCup");
        lcd_puts_var1(2, VAR_A);
        wait_ms(500);
    }
}
//--------------------------------------------------------------------------------
