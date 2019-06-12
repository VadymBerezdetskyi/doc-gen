## General 
**Code:** `kabare-kupon-kiev_uah`  
**Method:** `kabare-kupon-kiev`  
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
: [en] Order number  
: [uk] Номер замовлення  
: [ru] Номер заказа  
Hint:  
: [en] Order number  
: [uk] Номер замовлення  
: [ru] Номер заказа  
## JSON Object 
```json
 {"code":"kabare-kupon-kiev_uah","method":"kabare-kupon-kiev","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Order number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0437\u0430\u043c\u043e\u0432\u043b\u0435\u043d\u043d\u044f","ru":"\u041d\u043e\u043c\u0435\u0440 \u0437\u0430\u043a\u0430\u0437\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Order number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0437\u0430\u043c\u043e\u0432\u043b\u0435\u043d\u043d\u044f","ru":"\u041d\u043e\u043c\u0435\u0440 \u0437\u0430\u043a\u0430\u0437\u0430"},"example":"14161"}],"amount_min":2,"amount_max":14999}```  
