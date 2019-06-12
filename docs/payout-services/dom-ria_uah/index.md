## General 
**Code:** `dom-ria_uah`  
**Method:** `dom-ria`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^(\w|\.| |\-|\+|@){1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^(\w|\.| |\-|\+|@){1,128}$/`  
Required: `1`  
Label:  
: [en] Customer ID, or Phone Number  
: [uk] ID клієнта або номер телефону  
: [ru] ID клиента или номер телефона  
Hint:  
: [en] Customer ID, or Phone Number  
: [uk] ID клієнта або номер телефону  
: [ru] ID клиента или номер телефона  
## JSON Object 
```json
 {"code":"dom-ria_uah","method":"dom-ria","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Customer ID, or Phone Number","uk":"ID \u043a\u043b\u0456\u0454\u043d\u0442\u0430 \u0430\u0431\u043e \u043d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443","ru":"ID \u043a\u043b\u0438\u0435\u043d\u0442\u0430 \u0438\u043b\u0438 \u043d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Customer ID, or Phone Number","uk":"ID \u043a\u043b\u0456\u0454\u043d\u0442\u0430 \u0430\u0431\u043e \u043d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443","ru":"ID \u043a\u043b\u0438\u0435\u043d\u0442\u0430 \u0438\u043b\u0438 \u043d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430"},"example":"113038326"}],"amount_min":2,"amount_max":14999}```  
