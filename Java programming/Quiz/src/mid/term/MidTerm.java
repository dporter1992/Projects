/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mid.term;

import java.util.Scanner;

public class MidTerm {

    public static void main(String[] args) {
       
         int c = 0;
         Scanner scan = new Scanner (System.in);
 
         System.out.println("Who won the most Stanley cups? ");
         System.out.println("A) Montreal Canadians  ");
         System.out.println("B) Toronto Maple Leafs ");
         System.out.println("C) Boston Bruins ");
         System.out.println("D) Detroit Red Wings \n");
 
           String in;
            in = scan.nextLine();
 
 
                if(in.equals("A"))
                {
                        System.out.println("Correct\n");
                        c++;
                }
 
                else
                {
                        System.out.println("Wrong\n");
                }
 
                System.out.println("How many Stanley cups did the Boston Bruins win?\n");
 
                System.out.println("A) 0 ");
                System.out.println("B) 13 ");
                System.out.println("C) 11 ");
                System.out.println("D) 6\n");
 
                in=scan.nextLine();
 
                if(in.equalsIgnoreCase("D"))
                                {
                                        System.out.println("Correct\n");
                                        c++;
                                }
 
                                else
                                {
                                        System.out.println("Wrong\n");
                                }
                
                System.out.println("How many Stanley cups did the Toronto Maple Leafs win?\n");
 
                System.out.println("A) 23  ");
                System.out.println("B) 13 ");
                System.out.println("C) 6 ");
                System.out.println("D) 11\n");
 
                in=scan.nextLine();
 
                if(in.equalsIgnoreCase("B"))
                                {
                                        System.out.println("Correct\n");
                                        c++;
                                }
 
                                else
                                {
                                        System.out.println("Wrong\n");
                                }
                System.out.println("What year has the NHL been founded?\n");
 
                System.out.println("A) 2016 ");
                System.out.println("B) 1917 ");
                System.out.println("C) 1906 ");
                System.out.println("D) 1918\n");
 
                in=scan.nextLine();
 
                if(in.equalsIgnoreCase("B"))
                                {
                                        System.out.println("Correct\n");
                                        c++;
                                }
 
                                else
                                {
                                        System.out.println("Wrong\n");
                                }
                System.out.println("How old is Don Cherry?\n");
 
                System.out.println("A) 90");
                System.out.println("B) 75");
                System.out.println("C) 82");
                System.out.println("D) 79\n");
 
                in=scan.nextLine();
 
                if(in.equalsIgnoreCase("C"))
                                {
                                        System.out.println("Correct\n");
                                        c++;
                                }
 
                                else
                                {
                                        System.out.println("Wrong\n");
                                }
 
 
 
 
             System.out.println(c + " Correct out of 5");
             System.out.println(100 * c/5 + "%");
 
        }
        
    

        
        
        
    }
    
    
   
    
    
    


