## General 
**Code:** `prat-lvivoblenergo-elektroenergiia_uah`  
**Method:** `prat-lvivoblenergo-elektroenergiia`  
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
: [en] Peculiar rakhunok  
: [uk] Особівій рахунок  
: [ru] Лица в счет  
Hint:  
: [en] Peculiar rakhunok  
: [uk] Особівій рахунок  
: [ru] Лица в счет  
## JSON Object 
```json
 {"code":"prat-lvivoblenergo-elektroenergiia_uah","method":"prat-lvivoblenergo-elektroenergiia","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Peculiar rakhunok","uk":"\u041e\u0441\u043e\u0431\u0456\u0432\u0456\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041b\u0438\u0446\u0430 \u0432 \u0441\u0447\u0435\u0442"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Peculiar rakhunok","uk":"\u041e\u0441\u043e\u0431\u0456\u0432\u0456\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041b\u0438\u0446\u0430 \u0432 \u0441\u0447\u0435\u0442"},"example":"1800504200"}],"amount_min":2,"amount_max":14999}```  
