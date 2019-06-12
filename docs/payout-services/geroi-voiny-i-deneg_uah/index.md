## General 
**Code:** `geroi-voiny-i-deneg_uah`  
**Method:** `geroi-voiny-i-deneg`  
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
: [en] Nickname  
: [uk] Нік  
: [ru] Ник  
Hint:  
: [en] Enter nickname  
: [uk] Введіть нік  
: [ru] Введите ник  
## JSON Object 
```json
 {"code":"geroi-voiny-i-deneg_uah","method":"geroi-voiny-i-deneg","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Nickname","uk":"\u041d\u0456\u043a","ru":"\u041d\u0438\u043a"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter nickname","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u0456\u043a","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u0438\u043a"},"example":"Chepik13"}],"amount_min":7,"amount_max":4999}```  
