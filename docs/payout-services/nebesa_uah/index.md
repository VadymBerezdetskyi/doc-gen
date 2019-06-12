## General 
**Code:** `nebesa_uah`  
**Method:** `nebesa`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `10`  to `4999`  UAH ## Fields 
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
: [en] A bill  
: [uk] Рахунок  
: [ru] Счет  
Hint:  
: [en] Enter a bill  
: [uk] Введіть рахунок  
: [ru] Введите счет  
## JSON Object 
```json
 {"code":"nebesa_uah","method":"nebesa","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"A bill","uk":"\u0420\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u0421\u0447\u0435\u0442"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter a bill","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0441\u0447\u0435\u0442"},"example":"6789972"}],"amount_min":10,"amount_max":4999}```  
