## General 
**Code:** `superdeal_uah`  
**Method:** `superdeal`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `5`  to `14999`  UAH ## Fields 
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
: [en] Room number  
: [uk] Номер замовлення  
: [ru] Номер замовлення  
Hint:  
: [en] Room number  
: [uk] Номер замовлення  
: [ru] Номер замовлення  
## JSON Object 
```json
 {"code":"superdeal_uah","method":"superdeal","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Room number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0437\u0430\u043c\u043e\u0432\u043b\u0435\u043d\u043d\u044f","ru":"\u041d\u043e\u043c\u0435\u0440 \u0437\u0430\u043c\u043e\u0432\u043b\u0435\u043d\u043d\u044f"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Room number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0437\u0430\u043c\u043e\u0432\u043b\u0435\u043d\u043d\u044f","ru":"\u041d\u043e\u043c\u0435\u0440 \u0437\u0430\u043c\u043e\u0432\u043b\u0435\u043d\u043d\u044f"},"example":"1955200"}],"amount_min":5,"amount_max":14999}```  
