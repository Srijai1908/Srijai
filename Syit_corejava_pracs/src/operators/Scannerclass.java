package operators;
import java.util.Scanner;
public class Scannerclass {

	public static void main(String[] args) {
	Scanner sc=new Scanner(System.in);
    System.out.print("Enter a number: ");
    int a=sc.nextInt();
    System.out.println("Number Entered is:"+a);
    System.out.print("Enter Your Name: ");
    String b=sc.next();
    System.out.print("Your Name is:"+b);
    sc.close();
    
	}

}
