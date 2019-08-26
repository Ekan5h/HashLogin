public class client {

  public static void main(String[] args) {
      final int user = 14358;
      final int seed = 37;
      int a1[] = base70(user);
      int a2[] = base70(seed + System.currentTimeMillis() / 60000);
      int s = (int)(System.currentTimeMillis() / 60000)%100;
      char c[] = {'z','A','4','y','B','x','C','w','D','*','v','E','u','F','t','G','s','H','r','I','!','q','J','p','7','K','@','1','o','5','L','n','#','M','2','m','&','N','l','O','-','k','9','P','j','Q','i','R','3','h','S','g','$','T','f','6','U','e','V','d','W','c','X','b','Y','_','a','8','Z','0'};
      System.out.print("Encrypted Key: ");
      System.out.print(c[(a2[2]+s)%70]);
      System.out.print(c[(a1[0]+s)%70]);
      System.out.print(c[(a2[1]+s)%70]);
      System.out.print(c[(a1[2]+s)%70]);
      System.out.print(c[(a1[1]+s)%70]);
      System.out.print(c[(a2[0]+s)%70]);
      System.out.println();
  }
  
  static int[] base70(long n){
    int out[] = new int[3];
    int i = 0;
    long j = n;
    while(j>0 && i<3){
      out[i++] = (int) j%70;
      j /= 70;
    }
    return(out);
  }
}
