## General 
**Code:** `isp-belnet-odeska-mikolayivska_uah`  
**Method:** `isp-belnet-odeska-mikolayivska`  
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
: [en] Login  
: [uk] Логін  
: [ru] Логин  
Hint:  
: [en] Login  
: [uk] Логін  
: [ru] Логин  
## JSON Object 
```json
 {"code":"isp-belnet-odeska-mikolayivska_uah","method":"isp-belnet-odeska-mikolayivska","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Login","uk":"\u041b\u043e\u0433\u0456\u043d","ru":"\u041b\u043e\u0433\u0438\u043d"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Login","uk":"\u041b\u043e\u0433\u0456\u043d","ru":"\u041b\u043e\u0433\u0438\u043d"},"example":"123456"}],"amount_min":2,"amount_max":14999}```  
