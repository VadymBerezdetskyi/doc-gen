## General 
**Code:** `itelkom-zaporozhe_uah`  
**Method:** `itelkom-zaporozhe`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
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
: [en] Unique code  
: [uk] Унікальний код  
: [ru] Уникальный код  
Hint:  
: [en] Unique code  
: [uk] Унікальний код  
: [ru] Уникальный код  
## JSON Object 
```json
 {"code":"itelkom-zaporozhe_uah","method":"itelkom-zaporozhe","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Unique code","uk":"\u0423\u043d\u0456\u043a\u0430\u043b\u044c\u043d\u0438\u0439 \u043a\u043e\u0434","ru":"\u0423\u043d\u0438\u043a\u0430\u043b\u044c\u043d\u044b\u0439 \u043a\u043e\u0434"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Unique code","uk":"\u0423\u043d\u0456\u043a\u0430\u043b\u044c\u043d\u0438\u0439 \u043a\u043e\u0434","ru":"\u0423\u043d\u0438\u043a\u0430\u043b\u044c\u043d\u044b\u0439 \u043a\u043e\u0434"},"example":"38078"}],"amount_min":2,"amount_max":14999}```  
