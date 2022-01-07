package main

import (
    "fmt"
    "testing"
)

func BenchmarkAsync(b *testing.B) {
	UpdatedMessageList := sendAsync(MessageList)
	for i, v := range UpdatedMessageList {
		fmt.Println(i, v)
	}

	fmt.Println("ASYNC SENDING COMPLETED")
}

func BenchmarkSync(b *testing.B) {
	UpdatedMessageList := sendSync(MessageList)
	for i, v := range UpdatedMessageList {
		fmt.Println(i, v)
	}
	fmt.Println("SYNC SENDING COMPLETED")
}
