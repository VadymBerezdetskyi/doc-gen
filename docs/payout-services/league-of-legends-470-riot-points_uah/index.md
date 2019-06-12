## General 
**Code:** `league-of-legends-470-riot-points_uah`  
**Method:** `league-of-legends-470-riot-points`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `80`  to `80`  UAH ## Fields 
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
: [en] Login  
: [uk] Логин  
: [ru] Логин  
Hint:  
: [en] Enter login  
: [uk] Введіть логин  
: [ru] Введите логин  
## JSON Object 
```json
 {"code":"league-of-legends-470-riot-points_uah","method":"league-of-legends-470-riot-points","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Login","uk":"\u041b\u043e\u0433\u0438\u043d","ru":"\u041b\u043e\u0433\u0438\u043d"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter login","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043b\u043e\u0433\u0438\u043d","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043b\u043e\u0433\u0438\u043d"},"example":"Probe"}],"amount_min":80,"amount_max":80}```  
