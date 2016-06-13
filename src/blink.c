#include <avr/io.h>
#include <util/delay.h>

static void setup(void)
{
    DDRB |= (1 << PORTB5);
}

static void loop(void)
{
    PORTB |= (1 << PORTB5);
    _delay_ms(1000);
    PORTB &= ~(1 << PORTB5);
    _delay_ms(1000);
}

int main(void)
{
    setup();

    while (1) {
        loop();
    }

    return 1;
}
