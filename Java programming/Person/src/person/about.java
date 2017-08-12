/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package person;


public class about {
    
    private int age ;
	
	public about( int age )
	{
		super();
		this.age = age;
	}
	
	public int hashCode()
	{
		return age;
	}
	
	public boolean equals( Object obj )
	{
		boolean flag = false;
		about emp = ( about )obj;
		if( emp.age == age )
			flag = true;
		return flag;
	}
    
}
