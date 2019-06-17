
## General 
 
**Code:** `payment_card_rub` 
 
**Method:** `payment_card` 
 
**Currency:** `RUB`[show -->]() 
 
**Amount limits:** from `0.01` to `100000` RUB  

## Fields 

### Overview 

|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`card_number`|✔ |`string`|`/\d{12,19}/`| 
 

### Details 
 
0. **`card_number`**  
 
	Type: `string` 
 
	Regexp: `/\d{12,19}/` 
 
	Required: `1` 
 
	Label:  
	: [en] Card number  
	: [ru] Номер карты  
	: [uk] Номер карти  
 
	Hint:  
	: [en] Enter card number  
	: [ru] Введите номер карты  
	: [uk] Введіть номер карти  
 

## JSON Object 

```json
{
  "code":"payment_card_rub",
  "method":"payment_card",
  "currency":"RUB",
  "fields":[
    {
      "key":"card_number",
      "type":"string",
      "label":{
        "en":"Card number",
        "ru":"\u041d\u043e\u043c\u0435\u0440 \u043a\u0430\u0440\u0442\u044b",
        "uk":"\u041d\u043e\u043c\u0435\u0440 \u043a\u0430\u0440\u0442\u0438"
      },
      "hint":{
        "en":"Enter card number",
        "ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u043a\u0430\u0440\u0442\u044b",
        "uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u043a\u0430\u0440\u0442\u0438"
      },
      "regexp":"\/\\d{12,19}\/",
      "required":true,
      "position":1,
      "options":{
        "validators":[
          {
            "name":"Luhn"
          }
        ]
      }
    }
  ],
  "amount_min":0.01,
  "amount_max":100000
}
```  
