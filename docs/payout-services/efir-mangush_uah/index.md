## General 
**Code:** `efir-mangush_uah`  
**Method:** `efir-mangush`  
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
: [en] Personal Account  
: [uk] Лицевой рахунок  
: [ru] Лицевой счет  
Hint:  
: [en] Enter Personal Account  
: [uk] Введіть Лицевой рахунок  
: [ru] Введите Лицевой счет  
## JSON Object 
```json
 {"code":"efir-mangush_uah","method":"efir-mangush","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Personal Account","uk":"\u041b\u0438\u0446\u0435\u0432\u043e\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041b\u0438\u0446\u0435\u0432\u043e\u0439 \u0441\u0447\u0435\u0442"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter Personal Account","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u041b\u0438\u0446\u0435\u0432\u043e\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u041b\u0438\u0446\u0435\u0432\u043e\u0439 \u0441\u0447\u0435\u0442"},"example":"690500"}],"amount_min":2,"amount_max":14999}```  
