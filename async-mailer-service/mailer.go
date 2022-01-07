package main

import (
	"time"
	"fmt"
)

func sendMesage(Message *Message) bool{
	// imitiate message sending by time pause
	time.Sleep(2 * time.Second)
	fmt.Println(Message)
	return true
}
