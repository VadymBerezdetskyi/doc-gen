## General 
**Code:** `naemniki_uah`  
**Method:** `naemniki`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `1`  to `4999`  UAH ## Fields 
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
: [en] ID, or Login  
: [uk] ID або логін  
: [ru] ID или логин  
Hint:  
: [en] Enter ID, or Login  
: [uk] Введіть ID або логін  
: [ru] Введите ID или логин  
## JSON Object 
```json
 {"code":"naemniki_uah","method":"naemniki","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"ID, or Login","uk":"ID \u0430\u0431\u043e \u043b\u043e\u0433\u0456\u043d","ru":"ID \u0438\u043b\u0438 \u043b\u043e\u0433\u0438\u043d"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter ID, or Login","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c ID \u0430\u0431\u043e \u043b\u043e\u0433\u0456\u043d","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 ID \u0438\u043b\u0438 \u043b\u043e\u0433\u0438\u043d"},"example":"2614133"}],"amount_min":1,"amount_max":4999}```  
