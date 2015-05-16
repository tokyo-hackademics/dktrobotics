#include "D_Main.h"
#include "D_I2C.h"
#include "D_SIO.h"
//--------------------------------------------------------------------------------
// Program Name : touch.C
//--------------------------------------------------------------------------------
void user_main(void)
{
    while (TRUE) {
        gV[VAR_A] = gAD[CN3];
        gV[VAR_B] = gAD[CN4];
        lcd_putX(1, (ROMC *)"Right  Left");
        lcd_puts_sensor(2, CN1, CN2, CN3, CN4);
    }
}
//--------------------------------------------------------------------------------
