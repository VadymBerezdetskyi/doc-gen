## General 
**Code:** `tvoyi-groshi-prodlenie-kredita_uah`  
**Method:** `tvoyi-groshi-prodlenie-kredita`  
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
: [en] Telephone number  
: [uk] Номер мобільного телефону  
: [ru] Номер мобильного телефона  
Hint:  
: [en] Telephone number  
: [uk] Номер мобільного телефону  
: [ru] Номер мобильного телефона  
## JSON Object 
```json
 {"code":"tvoyi-groshi-prodlenie-kredita_uah","method":"tvoyi-groshi-prodlenie-kredita","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Telephone number","uk":"\u041d\u043e\u043c\u0435\u0440 \u043c\u043e\u0431\u0456\u043b\u044c\u043d\u043e\u0433\u043e \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u043c\u043e\u0431\u0438\u043b\u044c\u043d\u043e\u0433\u043e \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Telephone number","uk":"\u041d\u043e\u043c\u0435\u0440 \u043c\u043e\u0431\u0456\u043b\u044c\u043d\u043e\u0433\u043e \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u043c\u043e\u0431\u0438\u043b\u044c\u043d\u043e\u0433\u043e \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430"},"example":"(097)324-23-68"}],"amount_min":2,"amount_max":14999}```  
