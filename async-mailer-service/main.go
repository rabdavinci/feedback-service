package main

import (
	"fmt"
)

func main() {
	UpdatedMessageList := sendAsync(MessageList)

	for i, v := range UpdatedMessageList {
		fmt.Println(i, v)
	}
}
