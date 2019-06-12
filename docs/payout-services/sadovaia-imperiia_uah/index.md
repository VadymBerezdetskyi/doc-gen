## General 
**Code:** `sadovaia-imperiia_uah`  
**Method:** `sadovaia-imperiia`  
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
: [en] ID, in game  
: [uk] ID в грі  
: [ru] ID в игре  
Hint:  
: [en] Enter ID, in game  
: [uk] Введіть ID в грі  
: [ru] Введите ID в игре  
## JSON Object 
```json
 {"code":"sadovaia-imperiia_uah","method":"sadovaia-imperiia","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"ID, in game","uk":"ID \u0432 \u0433\u0440\u0456","ru":"ID \u0432 \u0438\u0433\u0440\u0435"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter ID, in game","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c ID \u0432 \u0433\u0440\u0456","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 ID \u0432 \u0438\u0433\u0440\u0435"}}],"amount_min":7,"amount_max":4999}```  
