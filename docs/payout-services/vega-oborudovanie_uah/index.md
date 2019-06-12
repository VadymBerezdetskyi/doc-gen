## General 
**Code:** `vega-oborudovanie_uah`  
**Method:** `vega-oborudovanie`  
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
: [en] Account Number  
: [uk] Номер рахунку  
: [ru] Номер счета  
Hint:  
: [en] Enter Account Number  
: [uk] Введіть номер рахунку  
: [ru] Введите номер счета  
## JSON Object 
```json
 {"code":"vega-oborudovanie_uah","method":"vega-oborudovanie","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Account Number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0435\u0442\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter Account Number","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0443","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0441\u0447\u0435\u0442\u0430"},"example":"1005171011006"}],"amount_min":2,"amount_max":14999}```  
