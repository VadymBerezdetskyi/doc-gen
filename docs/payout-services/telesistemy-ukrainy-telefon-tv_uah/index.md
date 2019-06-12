## General 
**Code:** `telesistemy-ukrainy-telefon-tv_uah`  
**Method:** `telesistemy-ukrainy-telefon-tv`  
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
: [en] A checking account  
: [uk] Розрахунковий рахунок  
: [ru] Расчетный счет  
Hint:  
: [en] Enter a checking account  
: [uk] Введіть розрахунковий рахунок  
: [ru] Введите расчетный счет  
## JSON Object 
```json
 {"code":"telesistemy-ukrainy-telefon-tv_uah","method":"telesistemy-ukrainy-telefon-tv","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"A checking account","uk":"\u0420\u043e\u0437\u0440\u0430\u0445\u0443\u043d\u043a\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u0420\u0430\u0441\u0447\u0435\u0442\u043d\u044b\u0439 \u0441\u0447\u0435\u0442"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter a checking account","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0440\u043e\u0437\u0440\u0430\u0445\u0443\u043d\u043a\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0440\u0430\u0441\u0447\u0435\u0442\u043d\u044b\u0439 \u0441\u0447\u0435\u0442"},"example":"61442"}],"amount_min":2,"amount_max":14999}```  
