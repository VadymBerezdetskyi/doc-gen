## General 
**Code:** `tm-opensvit_uah`  
**Method:** `tm-opensvit`  
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
: [en] A Log  
: [uk] Введiть Логiн  
: [ru] Логин  
Hint:  
: [en] Enter a Log  
: [uk] Введiть Логiн  
: [ru] Введите логин  
## JSON Object 
```json
 {"code":"tm-opensvit_uah","method":"tm-opensvit","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"A Log","uk":"\u0412\u0432\u0435\u0434i\u0442\u044c \u041b\u043e\u0433i\u043d","ru":"\u041b\u043e\u0433\u0438\u043d"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter a Log","uk":"\u0412\u0432\u0435\u0434i\u0442\u044c \u041b\u043e\u0433i\u043d","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043b\u043e\u0433\u0438\u043d"},"example":"slava"}],"amount_min":2,"amount_max":14999}```  
