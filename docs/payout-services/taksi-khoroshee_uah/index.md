## General 
**Code:** `taksi-khoroshee_uah`  
**Method:** `taksi-khoroshee`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `5000`  UAH ## Fields 
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
: [en] Phone number  
: [uk] Номер телефону  
: [ru] Номер телефона  
Hint:  
: [en] Phone number  
: [uk] Номер телефону  
: [ru] Номер телефона  
## JSON Object 
```json
 {"code":"taksi-khoroshee_uah","method":"taksi-khoroshee","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Phone number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Phone number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430"},"example":"0500155177"}],"amount_min":2,"amount_max":5000}```  
