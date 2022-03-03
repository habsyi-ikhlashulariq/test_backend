package main

import (
	"encoding/json"
	"github.com/PuerkitoBio/goquery"
	"log"
	"net/http"
	// "fmt"
)

type Status struct{
	Code string `json:"code"`
	Message string `json:"message"`
}


type Data struct {
	Nama string `json:"ReceivedBy"`
}

type History struct{
	Title string `json:"histories"`
	// URL string
	// Category string
}

type Result struct {
	Status Status
	Data Data
}

func main(){
	res, err := http.Get("https://gist.githubusercontent.com/nubors/eecf5b8dc838d4e6cc9de9f7b5db236f/raw/d34e1823906d3ab36ccc2e687fcafedf3eacfac9/jne-awb.html")
	
	if err != nil {
		log.Fatal(err)
	}

	defer res.Body.Close()

	if res.StatusCode != 200 {
		log.Fatalf("status code error: %d %s",res.StatusCode, res.Status)
	}

	doc, err := goquery.NewDocumentFromReader(res.Body)
	if err != nil {
		log.Fatal(err)
	}

	rows := make([]History, 0)

	doc.Find("table tbody tr").Each(func(i int, sel *goquery.Selection){
			row := new(History)
			row.Title = sel.Find("td").Text()

			rows = append(rows, *row)
			// log.Println(code)
	})



	var status = Status{Code : "060101", Message: "Delivery tracking detail fetched successfully"}

	var nama = Data{Nama: "Pak Muradi"}
	var result = Result{status, nama}

	bts, err := json.MarshalIndent(result, ""," ")
	if err != nil{
		log.Fatal(err)
	}

	bts2, err := json.MarshalIndent(rows, ""," ")
	if err != nil{
		log.Fatal(err)
	}

	log.Print(string(bts),string(bts2))

}