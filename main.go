package main

import "encoding/json"
import "net/http"
import "fmt"

type Result struct{
	Status Status `json:"status"`
	Data Data `json:"data"`
}

type Status struct{
	Code string `json:"code"`
	Message string `json:"message"`
}

type Data struct{
	ReceivedBy string `json:"receivedBy"`
	Histories Histories `json:"histories"`
}

type Histories struct{
	Description string `json:"description"`
	CreatedAt string `json: "createdAt"`
	Formatted Formatted `json : "formatted"`
}

type Formatted struct {
	CreatedAt string `json: "createdAt"`
}


var status = Status{Code : "060101", Message: "Delivery tracking detail fetched successfully"}

var formatted = Formatted{CreatedAt : "04 Februari 2021, 10:22 WIB"}

var histories = Histories{Description : "DELIVERED TO [PAK MURADI  | 04-02-2021 10:22 | BEKASI ]", CreatedAt: "2021-02-04T10:22:00+07:00", Formatted : formatted }

var data = Data{ReceivedBy: "PAK MURADI", Histories:histories }

var results = Result{Status: status, Data: data}

func users(w http.ResponseWriter, r *http.Request) {
    w.Header().Set("Content-Type", "application/json")

    if r.Method == "GET" {
        var result, err = json.Marshal(results)

        if err != nil {
            http.Error(w, err.Error(), http.StatusInternalServerError)
            return
        }

        w.Write(result)
        return
    }

    http.Error(w, "", http.StatusBadRequest)
}

func main() {
    http.HandleFunc("/users", users)

    fmt.Println("starting web server at http://localhost:8181/")
    http.ListenAndServe(":8181", nil)
}