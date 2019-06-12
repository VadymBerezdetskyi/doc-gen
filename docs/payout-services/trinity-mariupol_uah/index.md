## General 
**Code:** `trinity-mariupol_uah`  
**Method:** `trinity-mariupol`  
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
: [en] Specify the contract number  
: [ru] Номер договора  
: [uk] Номер договору  
Hint:  
: [en] Specify the contract number  
: [ru] Укажите номер договора  
: [uk] Вкажіть номер договору  
## JSON Object 
```json
 {"code":"trinity-mariupol_uah","method":"trinity-mariupol","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Specify the contract number","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Specify the contract number","ru":"\u0423\u043a\u0430\u0436\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430","uk":"\u0412\u043a\u0430\u0436\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443"},"example":"45453"}],"amount_min":1,"amount_max":14999}```  
