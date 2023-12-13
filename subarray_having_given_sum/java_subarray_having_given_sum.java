class Main
{

    public static void findSubArray(int[] array, int k) {

        int last_seen_index = -1;
        int sum = 0;
        for (int i = 0 ; i< array.length; i++) {
            sum+= array[i];

            if (sum > k) {
                last_seen_index++;
                sum = sum - array[last_seen_index];
            }

            if (sum == k) {
                System.out.printf("subarray found at %d  and %d \n", last_seen_index + 1, i);
            }
        }
    }

    public static void main(String[] args) {
        int[] nums = { 2, 6, 0, 9, 7, 3, 1, 4, 1, 10 };
        int target = 15;

        findSubArray(nums, target);
    }
}