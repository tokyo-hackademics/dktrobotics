#include "D_Main.h"
#include "D_I2C.h"
#include "D_SIO.h"
//--------------------------------------------------------------------------------
// Program Name : sensor.C
//--------------------------------------------------------------------------------
void user_main(void)
{
    while (TRUE) {
        lcd_putX(1, (ROMC *)"CN1 CN2 CN3 CN4");
        lcd_puts_sensor(2, CN1, CN2, CN3, CN4);
    }
}
//--------------------------------------------------------------------------------
