#include "D_Main.h"
#include "D_I2C.h"
#include "D_SIO.h"
//--------------------------------------------------------------------------------
// Program Name : omni.C
//--------------------------------------------------------------------------------
void user_main(void)
{
    gPwm[0] = 0x1E; 
    gPwm[1] = 0x00; 
    gPwm[2] = 0x50; 
    gPwm[3] = 0x00; 
    gPwm[4] = 0x1E; 
    gPwm[5] = 0x00; 
    pwm_out();
    wait_ms(800);
    while (TRUE) {
        lcd_puts_sensor(1, CN1, CN2, CN3, CN4);
        if (gAD[CN1] > 30) {
            gV[VAR_A] = gAD[CN6];
            gPwm[0] = 0x32; 
            gPwm[1] = 0x00; 
            gPwm[2] = 0x00; 
            gPwm[3] = 0x00; 
            gPwm[4] = 0xB2; 
            gPwm[5] = 0x00; 
            pwm_out();
            wait_ms(500);
            gV[VAR_B] = gAD[CN6];
            if (gV[VAR_A] > gV[VAR_B]) {
                gPwm[0] = 0x32; 
                gPwm[1] = 0x00; 
                gPwm[2] = 0x00; 
                gPwm[3] = 0x00; 
                gPwm[4] = 0xB2; 
                gPwm[5] = 0x00; 
                pwm_out();
                wait_ms(1000);
            } else {
                gPwm[0] = 0xB2; 
                gPwm[1] = 0x00; 
                gPwm[2] = 0x00; 
                gPwm[3] = 0x00; 
                gPwm[4] = 0x32; 
                gPwm[5] = 0x00; 
                pwm_out();
                wait_ms(1500);
            }
        } else {
            gPwm[0] = 0x8F; 
            gPwm[1] = 0x00; 
            gPwm[2] = 0x28; 
            gPwm[3] = 0x00; 
            gPwm[4] = 0x8F; 
            gPwm[5] = 0x00; 
            pwm_out();
        }
    }
    while (TRUE) {
        gPwm[0] = 0x1E; 
        gPwm[1] = 0x00; 
        gPwm[2] = 0x00; 
        gPwm[3] = 0x00; 
        gPwm[4] = 0x9E; 
        gPwm[5] = 0x00; 
        pwm_out();
        wait_ms(1000);
    }
}
//--------------------------------------------------------------------------------
