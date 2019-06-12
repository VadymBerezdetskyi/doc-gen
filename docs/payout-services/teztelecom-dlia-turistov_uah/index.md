## General 
**Code:** `teztelecom-dlia-turistov_uah`  
**Method:** `teztelecom-dlia-turistov`  
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
: [en] Specify TezGSM Number  
: [uk] Номер TezGSM  
: [ru] Номер TezGSM  
Hint:  
: [en] Specify TezGSM Number  
: [uk] Вкажіть Номер TezGSM  
: [ru] Укажите Номер TezGSM  
## JSON Object 
```json
 {"code":"teztelecom-dlia-turistov_uah","method":"teztelecom-dlia-turistov","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Specify TezGSM Number","uk":"\u041d\u043e\u043c\u0435\u0440 TezGSM","ru":"\u041d\u043e\u043c\u0435\u0440 TezGSM"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Specify TezGSM Number","uk":"\u0412\u043a\u0430\u0436\u0456\u0442\u044c \u041d\u043e\u043c\u0435\u0440 TezGSM","ru":"\u0423\u043a\u0430\u0436\u0438\u0442\u0435 \u041d\u043e\u043c\u0435\u0440 TezGSM"},"example":"37259200008"}],"amount_min":2,"amount_max":14999}```  
