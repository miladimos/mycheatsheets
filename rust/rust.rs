fn main() {
    println!("Hello World");

    // let var_name: var_type = value;

    // let x = 10; // default is immutable
    // let mut y = 11;
    // const CONSTANT: i32 = 20;

    // let a: i32 = 1000000;
    // let b: i32 = 1_000_000;
    // let c: i32 = 0xFB;
    // let d: i32 = 0o44;
    // let e: i32 = 0b01111111_11110101;

    // let ch: char = 'a';
    // let ch1: char = 'ب';

    // let arr: [u8; 3] = [2,4,1];

    // let arr1: [u128; 100] = [0u128; 100];

    // println!("Value of x : {}", arr[1]);
    // println!("Value of x : {:#?}", arr);

    // let m_tuple: (u8, bool, &str) = (10, true, "hello");

    // println!("value : {}", m_tuple.2);


    let mut m_string: String = String::from("New String");
    m_string.push_str(" Is Rust");
    println!("{}", m_string);
}

// fn multiple(num: u8) -> u8 {
//     return num * 2;
// }

// fn factorial(n: u64) -> u64{
//     if n <= 1 {
//         1
//     }
//     return n * factorial(n - 1);
// }

