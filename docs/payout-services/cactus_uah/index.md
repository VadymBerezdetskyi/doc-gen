## General 
**Code:** `cactus_uah`  
**Method:** `cactus`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `5`  to `500`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^\d{1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^\d{1,128}$/`  
Required: `1`  
Label:  
: [en] Subscriber number  
: [uk] Номер абонента  
: [ru] Номер абонента  
Hint:  
: [en] Subscriber number  
: [uk] Номер абонента  
: [ru] Номер абонента  
## JSON Object 
```json
 {"code":"cactus_uah","method":"cactus","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Subscriber number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430","ru":"\u041d\u043e\u043c\u0435\u0440 \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Subscriber number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430","ru":"\u041d\u043e\u043c\u0435\u0440 \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430"},"example":"08851"}],"amount_min":5,"amount_max":500}```  
