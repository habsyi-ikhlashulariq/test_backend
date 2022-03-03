package main

import (
	"encoding/json"
    // "fmt"
	"log"
)



type MyBoxItem struct {
    Description string
    CreatedAt string
	Formatted Formatted
}

type Formatted struct{
	createdAt string
}

type MyBox struct {
	Nama string 
    Data []MyBoxItem
}

type Status struct {
	Code string
	Message string
}

type Result struct {
	Status Status
	Histories MyBox
}

func (box *MyBox) AddItem(item MyBoxItem) []MyBoxItem {
    box.Data = append(box.Data, item)
    return box.Data
}

func main() {

    item1 := MyBoxItem{Description: "DELIVERED TO [PAK MURADI  | 04-02-2021 10:22 | BEKASI ]", CreatedAt: "2021-02-04T10:22:00+07:00", Formatted : Formatted{createdAt : "04 Februari 2021, 10:22 WIB"}}

    item2 := MyBoxItem{Description: "WITH DELIVERY COURIER [BEKASI]", CreatedAt : "2021-02-03T08:55:00+07:00", Formatted : Formatted{createdAt: "04 Februari 2021, 08:55 WIB"}}

    item3 := MyBoxItem{Description: "RECEIVED AT INBOUND STATION [BEKASI, HUB JATIASIH 4]", CreatedAt : "2021-02-03T08:00:00+07:00", Formatted : Formatted{createdAt: "04 Februari 2021, 08:55 WIB"}}

    item4 := MyBoxItem{Description: "SHIPMENT FORWARDED TO DESTINATION [BEKASI, HUB JATIASIH 4]", CreatedAt : "2021-02-03T06:40:00+07:00", Formatted : Formatted{createdAt: "04 Februari 2021, 06:40 WIB"}}

    item5 := MyBoxItem{Description: "RECEIVED AT WAREHOUSE [INBOUND BKI1]", CreatedAt : "2021-02-03T02:06:00+07:00", Formatted : Formatted{createdAt: "04 Februari 2021, 02:06 WIB"}}

    item6 := MyBoxItem{Description: "RECEIVED AT ORIGIN GATEWAY [JAKARTA]", CreatedAt : "2021-02-03T00:15:00+07:00", Formatted : Formatted{createdAt: "04 Februari 2021, 00:15 WIB"}}

    item7 := MyBoxItem{Description: "PROCESSED AT SORTING CENTER [JAKARTA, BANDARA MAS(OUTBOUND)]", CreatedAt : "2021-02-03T22:38:00+07:00", Formatted : Formatted{createdAt: "03 Februari 2021, 22:38 WIB"}}

    item8 := MyBoxItem{Description: "RECEIVED AT SORTING CENTER [JAKARTA]", CreatedAt : "2021-02-03T21:44:00+07:00", Formatted : Formatted{createdAt: "03 Februari 2021, 21:44 WIB"}}

    item9 := MyBoxItem{Description: "SHIPMENT RECEIVED BY JNE COUNTER OFFICER AT [JAKARTA]", CreatedAt : "2021-02-03T20:26:00+07:00", Formatted : Formatted{createdAt: "03 Februari 2021, 20:26 WIB"}}

    items := []MyBoxItem{}
    box :=  MyBox{"nana",items}

    box.AddItem(item1)  
    box.AddItem(item2) 
    box.AddItem(item3) 
    box.AddItem(item4) 
    box.AddItem(item5) 
    box.AddItem(item6) 
    box.AddItem(item7) 
    box.AddItem(item8) 
    box.AddItem(item9) 

	var status = Status{ Code : "060101", Message : "Delivery tracking detail fetched successfully" }

	var result = Result{status, box}

    // fmt.Println(box.Items)

	bts, err := json.MarshalIndent(result, " "," ")
	if err != nil{
		log.Fatal(err)
	}

	log.Print(string(bts))
}