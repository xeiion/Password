# Password hashing Class

you can use the class like this

- $hash = new password();
- $hash->Salt(20);
- $hash->hash();

its returning an boolean

if($hash->VerifyHash()){

 //do something
 
}

