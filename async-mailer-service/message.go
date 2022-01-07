package main


type Message struct {
	ID         int     `json:"id"`
	UserName    string  `json:"username"`
	Email    string  `json:"email"`
	Title    string  `json:"title"`
	Text    string  `json:"text"`
	State    string  `json:"state"`
	CreatedOn  string `json:"created_at"`
	UpdatedOn  string `json:"updated_at"`
}


