package main

import (
	"sync"
	"fmt"
)

func sendAsync(MessageList []*Message) []*Message{
	fmt.Printf("Count of incoming messages %v \n", len(MessageList))
	wg := &sync.WaitGroup{}
	wg.Add(len(MessageList))
	for _, v := range MessageList {
		go func(message *Message) {
			if sendMesage(message) == true {
				message.State = "completed"
			} else {
				message.State = "error"
			}
			
			wg.Done()
    }(v)
	}
	wg.Wait()
	return MessageList
}

func sendSync(MessageList []*Message) []*Message{
	fmt.Printf("Count of incoming messages %v", len(MessageList))
	for _, v := range MessageList {
				if sendMesage(v) == true {
				v.State = "completed"
			} else {
				v.State = "error"
			}
	}
	return MessageList
}
