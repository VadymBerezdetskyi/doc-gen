## General 
**Code:** `psts_uah`  
**Method:** `psts`  
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
: [en] Your username  
: [uk] Ваш логін  
: [ru] Ваш логин  
Hint:  
: [en] Enter your username  
: [uk] Вкажіть ваш логін  
: [ru] Укажите ваш логин  
## JSON Object 
```json
 {"code":"psts_uah","method":"psts","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Your username","uk":"\u0412\u0430\u0448 \u043b\u043e\u0433\u0456\u043d","ru":"\u0412\u0430\u0448 \u043b\u043e\u0433\u0438\u043d"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter your username","uk":"\u0412\u043a\u0430\u0436\u0456\u0442\u044c \u0432\u0430\u0448 \u043b\u043e\u0433\u0456\u043d","ru":"\u0423\u043a\u0430\u0436\u0438\u0442\u0435 \u0432\u0430\u0448 \u043b\u043e\u0433\u0438\u043d"},"example":"kytsenko"}],"amount_min":2,"amount_max":14999}```  
