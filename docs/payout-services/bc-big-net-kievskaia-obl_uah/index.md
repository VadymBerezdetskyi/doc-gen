## General 
**Code:** `bc-big-net-kievskaia-obl_uah`  
**Method:** `bc-big-net-kievskaia-obl`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `5`  to `1000`  UAH ## Fields 
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
 {"code":"bc-big-net-kievskaia-obl_uah","method":"bc-big-net-kievskaia-obl","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Phone number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Phone number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430"},"example":"0982764287"}],"amount_min":5,"amount_max":1000}```  
