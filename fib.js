
var puts = console.log

function fib(n) {
    if (n <= 1) return 1
    else return fib(n - 1) + fib(n - 2)
}

puts(fib(38))
