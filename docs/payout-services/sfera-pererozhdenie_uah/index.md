## General 
**Code:** `sfera-pererozhdenie_uah`  
**Method:** `sfera-pererozhdenie`  
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
: [en] Identifier  
: [uk] Ідентифікатор  
: [ru] Идентификатор  
Hint:  
: [en] Enter identifier  
: [uk] Введіть ідентифікатор  
: [ru] Введите идентификатор  
## JSON Object 
```json
 {"code":"sfera-pererozhdenie_uah","method":"sfera-pererozhdenie","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Identifier","uk":"\u0406\u0434\u0435\u043d\u0442\u0438\u0444\u0456\u043a\u0430\u0442\u043e\u0440","ru":"\u0418\u0434\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u043e\u0440"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter identifier","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0456\u0434\u0435\u043d\u0442\u0438\u0444\u0456\u043a\u0430\u0442\u043e\u0440","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u0434\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u043e\u0440"},"example":"13584351"}],"amount_min":7,"amount_max":4999}```  
