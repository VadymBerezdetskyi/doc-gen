## General 
**Code:** `vikingi_uah`  
**Method:** `vikingi`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `7`  to `4999`  UAH ## Fields 
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
: [en] ID  
: [uk] ID  
: [ru] Идентификатор  
Hint:  
: [en] Enter ID  
: [uk] Введіть ID  
: [ru] Введите идентификатор  
## JSON Object 
```json
 {"code":"vikingi_uah","method":"vikingi","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"ID","uk":"ID","ru":"\u0418\u0434\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u043e\u0440"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter ID","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c ID","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u0434\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u043e\u0440"},"example":"2108529"}],"amount_min":7,"amount_max":4999}```  
