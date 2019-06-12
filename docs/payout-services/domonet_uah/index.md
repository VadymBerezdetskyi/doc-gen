## General 
**Code:** `domonet_uah`  
**Method:** `domonet`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `1`  to `14999`  UAH ## Fields 
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
: [en] Specify customer login  
: [uk] Свій логін клієнта  
: [ru] Логин клиента  
Hint:  
: [en] Specify customer login  
: [uk] Вкажіть свій логін клієнта  
: [ru] Укажите логин клиента  
## JSON Object 
```json
 {"code":"domonet_uah","method":"domonet","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Specify customer login","uk":"\u0421\u0432\u0456\u0439 \u043b\u043e\u0433\u0456\u043d \u043a\u043b\u0456\u0454\u043d\u0442\u0430","ru":"\u041b\u043e\u0433\u0438\u043d \u043a\u043b\u0438\u0435\u043d\u0442\u0430"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Specify customer login","uk":"\u0412\u043a\u0430\u0436\u0456\u0442\u044c \u0441\u0432\u0456\u0439 \u043b\u043e\u0433\u0456\u043d \u043a\u043b\u0456\u0454\u043d\u0442\u0430","ru":"\u0423\u043a\u0430\u0436\u0438\u0442\u0435 \u043b\u043e\u0433\u0438\u043d \u043a\u043b\u0438\u0435\u043d\u0442\u0430"},"example":"393794"}],"amount_min":1,"amount_max":14999}```  
