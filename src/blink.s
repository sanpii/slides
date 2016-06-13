.org 0x0000
rjmp setup

setup:
    ldi r16, 0xFF
    out DDRB, r16
    rjmp loop

loop:
    sbi PORTB, 5
    rjmp delay
    cbi PORTB, 5
    rjmp delay
    rjmp loop

delay:
    in r17, TCNT0
    cpi r17, 255
    brsh dim
