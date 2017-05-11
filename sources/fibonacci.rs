struct Fibonacci {
    current: u32,
    next: u32,
}

impl Iterator for Fibonacci {
    type Item = u32;

    fn next(&mut self) -> Option<u32> {
        let new = self.current + self.next;

        self.current = self.next;
        self.next = new;

        Some(self.current)
    }
}

impl Fibonacci {
    fn new() -> Self {
        Fibonacci { current: 1, next: 2 }
    }
}

fn main() {
    let sum = Fibonacci::new()
        .take_while(|x| *x < 4_000_000)
        .filter(|x| x % 2 == 0)
        .fold(0, |acc, x| acc + x);

    println!("{}", sum);
}
